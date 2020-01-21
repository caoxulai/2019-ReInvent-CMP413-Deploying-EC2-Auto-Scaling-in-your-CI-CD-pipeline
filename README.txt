Demo application for Builder Session: CMP413 - Deploying Amazon EC2 Auto Scaling in your CI/CD pipeline


Instruction for CPU usage test:
Command:
while sleep <time in second>; do curl -s <WebsiteURL in CFN outputs tab>/cpu_test.php & done

Example:
while sleep 1; do curl -s http://reinv-appli-1ct0ujscofib6-805034660.us-west-2.elb.amazonaws.com/cpu_test.php & done