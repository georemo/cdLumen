pipeline {
  agent any
  stages {
    stage('Build & Test') {
      steps {
        sh 'mvn -Dmaven.test.failure.ignore clean package'
      }
    }

  }
}