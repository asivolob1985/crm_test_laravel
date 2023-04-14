start serve:
	@echo "Starting laravel serve"
	docker exec -it php php artisan serve --host 0.0.0.0

init:
	@echo "Downloading vendor code with composer..."
	docker exec -it php composer install

	@echo "Executing database migrations..."
	docker exec -it php php artisan migrate

	@echo "Executing database seeding..."
	docker exec -it php php artisan db:seed
