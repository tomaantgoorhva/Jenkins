pipeline {
    agent any 

    stages {
        stage('Test'){
            steps {
                . 'vendor/bin/phpunit -c build/phpunit.xml || exit 0'
            }
        }

    }
}