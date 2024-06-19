table='public_holidays'
model='PublicHolidays'
controller='ApiStampController'
api='ApiAttendnaceController'
seeder='PublicHolidaysSeeder'
view='stamp'
request='AttendanceRequest'

pjt:
	composer create-project laravel/laravel kintai

run:
	cd kintai && php artisan serve

test:
	cd kintai && php artisan test

migrate:
	cd kintai && php artisan migrate
	cd kintai && php artisan db:seed
	./init-db.sh

rollback:
	cd kintai && php artisan migrate:rollback

migrate-file:
	cd kintai && php artisan make:migration ${table} --table=${table}

seeder:
	cd kintai && php artisan make:seeder ${seeder}

model:
	cd kintai && php artisan make:model ${model}

web-controller:
	cd kintai && php artisan make:controller ${controller}

api-controller:
	cd kintai && php artisan make:controller /Api/${api}

view:
	mkdir kintai/resources/views/${view} && touch kintai/resources/views/stamp/index.blade.php

tiker:
	cd kintai && php artisan tinker

request:
	cd kintai && php artisan make:request ${request}


.PHONY: pjt run db db-clean test migrate rollback migrate-file seeder model controller view tinker request