<?php
            $file_path = 'E:\php2\php.txt';
            $file_content = file_get_contents($file_path);
            $file_content_without_spaces = preg_replace('/\s+/u', '', $file_content);
            $characters_count = strlen($file_content_without_spaces);
            echo "Кількість символів у файлі: $characters_count";


