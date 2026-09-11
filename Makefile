phpcs-fixer:
	./vendor/bin/php-cs-fixer -v check

phpstan:
	./vendor/bin/phpstan analyse src --memory-limit 1G

