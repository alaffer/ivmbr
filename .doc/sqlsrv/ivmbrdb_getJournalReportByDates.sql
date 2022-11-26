drop procedure getJournalReportByDates;
GO
-- ================================================
-- Template generated from Template Explorer using:
-- Create Procedure (New Menu).SQL
--
-- Use the Specify Values for Template Parameters 
-- command (Ctrl-Shift-M) to fill in the parameter 
-- values below.
--
-- This block of comments will not be included in
-- the definition of the procedure.
-- ================================================
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		Andreas Laffer
-- Create date: 26.11.2022
-- Description:	gets the Journal Report by Dates as
--              list of Depots
-- =============================================
CREATE PROCEDURE getJournalReportByDates 
	-- Add the parameters for the stored procedure here
    @startdt date = null,
    @enddt date = null
AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

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

--select * from @tc

select @sqlc =  STRING_AGG(' SUM(CASE WHEN depot_id = ' + cast(t.depot_id as varchar) + ' THEN isnull(payin,0) ELSE 0 END) AS [' + t.name + '_EIN], SUM(CASE WHEN depot_id = ' + cast(t.depot_id as varchar) + ' THEN isnull(payout,0) ELSE 0 END) AS [' + t.name + '_AUS]', ',') 
from @tc t

    --select @sqlc;

	if @startdt is not null AND @enddt is not null  
		select @sqlwhere = CONCAT('WHERE (paydate >= ''', cast(@startdt as varchar), ''' AND paydate <=''', cast(@enddt as varchar), ''')') ;
	else if @startdt is not null 
		select @sqlwhere = CONCAT('WHERE (paydate >= ''', cast(@startdt as varchar), ''' AND paydate <=''', getdate(), ''')') ;
	else if @enddt is not null 
		select @sqlwhere = CONCAT('WHERE (paydate >= ''', 01-01-1970, '" AND paydate <=''', cast(@enddt as varchar), ''')') ;
	else
		select @sqlwhere = '';
	
	
    --SELECT @sqlwhere as sqlwhere; --, @startdt, @enddt
     
	select @sql = CONCAT('SELECT ROW_NUMBER() OVER (ORDER BY paydate) as row_number, paydate, purpose, ', @sqlc, 
	  ' FROM bookings ', @sqlwhere, ' GROUP BY paydate, purpose ORDER BY row_number');
	--SELECT @sql;

    execute (@sql);

END
GO

-- setzt die Sicherheit für die StoredProc getJournalReportByDates
GRANT EXECUTE ON [dbo].[getJournalReportByDates] TO [public]
GO
GRANT VIEW DEFINITION ON [dbo].[getJournalReportByDates] TO [public]
GO