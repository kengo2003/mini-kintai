
mysql -u 'root' -p kintai \
-e 'use kintai;' \
-e 'set character_set_client = utf8mb4;' \
-e 'set character_set_connection = utf8mb4;' \
-e 'set character_set_database = utf8;' \
-e 'set character_set_filesystem = binary;' \
-e 'set character_set_results = utf8mb4;' \
-e 'set character_set_server = utf8mb4;' \
-e 'select * from stamps;' \
-e 'select * from attendances;' \
-e 'select * from public_holidays;'