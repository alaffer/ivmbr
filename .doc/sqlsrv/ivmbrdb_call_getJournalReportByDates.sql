USE [ivmbrdb]
GO

DECLARE	@return_value int

EXEC	@return_value = [dbo].[getJournalReportByDates]
		@startdt = '2021-10-14',
        @enddt = null

SELECT	'Return Value' = @return_value

GO
