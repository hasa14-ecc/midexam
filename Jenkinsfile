pipeline {
    agent any
    environment {
        SONAR_TOKEN = credentials('sonarqube-token')
    }
    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/hasa14-ecc/midexam'
            }
        }
        stage('Install Dependencies') {
            steps {
                sh 'composer install'
            }
        }
        stage('Static Code Analysis') {
            steps {
                sh 'sonar-scanner'
            }
        }
        stage('Unit Test') {
            steps {
                sh './vendor/bin/phpunit --configuration phpunit.xml'
            }
        }
        stage('Report') {
            steps {
                junit 'tests/_output/phpunit-report.xml'
            }
        }
    }
    post {
        success {
            echo 'Pipeline Sukses'
        }
        failure {
            echo 'Pipeline Gagal'
        }
    }
}