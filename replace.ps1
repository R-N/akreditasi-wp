Get-Content dump.sql -ReadCount 10000 | 
    Foreach-Object {
		$line = $_
        $line = $line.Replace('utf8mb4_0900_ai_ci ', 'utf8_unicode_ci')
        $line = $line.Replace('utf8mb4_unicode_ci', 'utf8_unicode_ci')
        $line = $line.Replace('utf8mb4', 'utf8')
        $line = $line.Replace('utf8_unicode_520_ci', 'utf8_unicode_ci')
        $line = $line.Replace('utf8_unicode_ci', 'utf8_general_ci')
        $line = $line.Replace('utf8_0900_ai_ci', 'utf8_unicode_ci')
        Add-Content -Path dump1.sql -Value $line
    }