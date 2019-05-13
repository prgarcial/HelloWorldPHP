pipeline {
    agent { node { label 'php' } }
    stages {
        stage('build') {
            steps {
                git url: 'https://github.com/prgarcial/HelloWorldPHP.git'
            }
        }
    }
}
