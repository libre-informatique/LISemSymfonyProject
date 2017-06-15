.PHONY: test docs

all:
	@echo "Please choose a task."

lint:
	composer validate

test:
	vendor/phpunit/phpunit/phpunit -c phpunit.xml.dist --coverage-clover build/logs/clover.xml

docs:
	cd src/Resources/doc && sphinx-build -b html -d _build/doctrees . _build/html
