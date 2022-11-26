<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $procedure = "
        CREATE PROCEDURE getJournalReportByDates 
            @startdt date = null,
            @enddt date = null
        AS
        BEGIN

        declare @sqlwhere nvarchar(max)= NULL;
        declare @sql nvarchar(max)= NULL;
        declare @sqlc nvarchar(max)= NULL;

        declare @tc TABLE(depot_id int null , [name] nvarchar(100) null)
        insert into @tc
        select distinct b.depot_id, d.name
        from depots d 
        inner join bookings b on b.depot_id = d.id
        where paydate between @startdt and @enddt 
        union
        select id, name
        from depots
        where active = 1

        select @sqlc =  STRING_AGG(' SUM(CASE WHEN depot_id = ' + cast(t.depot_id as varchar) + ' THEN isnull(payin,0) ELSE 0 END) AS [' + t.name + '_EIN], SUM(CASE WHEN depot_id = ' + cast(t.depot_id as varchar) + ' THEN isnull(payout,0) ELSE 0 END) AS [' + t.name + '_AUS]', ',') 
        from @tc t


            if @startdt is not null AND @enddt is not null  
                select @sqlwhere = CONCAT('WHERE (paydate >= ''', cast(@startdt as varchar), ''' AND paydate <= ''', cast(@enddt as varchar), ''')') ;
            else if @startdt is not null 
                select @sqlwhere = CONCAT('WHERE (paydate >= ''', cast(@startdt as varchar), ''' AND paydate <= ''', getdate(), ''')') ;
            else if @enddt is not null 
                select @sqlwhere = CONCAT('WHERE (paydate >= ', CONVERT(DATETIME, 0), ' AND paydate <= ''', cast(@enddt as varchar), ''')') ;
            else
                select @sqlwhere = '';
            
            select @sql = CONCAT('SELECT ROW_NUMBER() OVER (ORDER BY paydate) as row_number, paydate, purpose, 
                        ', @sqlc, ' FROM bookings ', @sqlwhere, ' GROUP BY paydate, purpose ORDER BY row_number');

            execute (@sql);

        END";
    
        DB::unprepared("DROP procedure IF EXISTS getJournalReportByDates");
        DB::unprepared($procedure);    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
