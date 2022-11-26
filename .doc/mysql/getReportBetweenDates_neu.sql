CREATE DEFINER=`root`@`localhost` PROCEDURE `getReportBetweenDates`(IN startdt DATETIME, IN enddt DATETIME)
BEGIN
	SET @sqlwhere = NULL;
	SET @sql = NULL;
	SET @sqlc = NULL;
	SELECT
	GROUP_CONCAT(DISTINCT CONCAT(
	  'SUM(
	  CASE WHEN depot_id = "', depot_id, '" THEN ifnull(payin,0) ELSE 0 END) 
	  AS ', d.name, '_EIN'),
	  CONCAT(
	  ',SUM(
	  CASE WHEN depot_id = "', depot_id, '" THEN ifnull(payout,0) ELSE 0 END) 
	  AS ', d.name, '_AUS')
	)
	INTO @sqlc
	FROM bookings b
	inner join depots d on b.depot_id = d.id
    WHERE (DATE(paydate) >=  ifnull(startdt,"1970-01-01") AND DATE(paydate) <= ifnull(enddt, now()))
    union
    select 0 as id, 1 as depot_id, 0 as category_id, "1970-01-01" as paydate, '' as purpose, null as support_year, 0 as payin, 0 as payout, null as person, null as remarks, null as deleted_at, null as created_at, null as updated_at;

	if startdt is not null AND enddt is not null then 
		set @sqlwhere = CONCAT('WHERE (DATE(paydate) >= "', startdt, '" AND DATE(paydate) <="', enddt, '")') ;
	elseif startdt is not null then
		set @sqlwhere = CONCAT('WHERE (DATE(paydate) >= "', startdt, '" AND DATE(paydate) <="', NOW(), '")') ;
	elseif enddt is not null then
		set @sqlwhere = CONCAT('WHERE (DATE(paydate) >= "', 01-01-1970, '" AND DATE(paydate) <="', enddt, '")') ;
	else
		set @sqlwhere = '';
	end if;
	-- SELECT @sqlwhere, startdt, enddt;
     
	SET @sql = CONCAT('SELECT ROW_NUMBER() OVER (ORDER BY paydate) as row_number, paydate, purpose, ', @sqlc, 
	  ' FROM bookings ', @sqlwhere, ' GROUP BY paydate, purpose ORDER BY row_number');
	-- SELECT @sql;
	 
	PREPARE stmt FROM @sql;
	EXECUTE stmt;
	DEALLOCATE PREPARE stmt;
END