<html>
	<head>
		<style type="text/css">
			.clouds{
				position: fixed;
				top: 0;
				right: 0;
				bottom: 0;
				left: 0;
				background: #68adf2;
				color: #2c3e50;
			}
			.cloud{
				width: 22.5em;
				height: 7.5em;
				background: #f2f9fe;
				-moz-border-radius: 6.25em;
				-webkit-border-radius: 6.25em;
				border-radius: 6.25em;
				position: relative;
				margin: 7.5em auto 1.25em;
			}
			.cloud:after, .cloud:before{
				content: "";
				position: absolute;
				background: #f2f9fe;
				z-index: -1;
				border-radius: 50%;
			}
			.cloud:after{
				width: 7.5em;
				height: 7.5em;
				top: -3.125em;
				left: 3.125em;
			}
			.cloud:before{
				width: 11.25em;
				height: 11.25em;
				top: -5.625em;
				right: 3.125em;
			}
			.cloud.s1{
				-moz-transform: scale(0.9, 0.9);
				-ms-transform: scale(0.9, 0.9);
				-webkit-transform: scale(0.9, 0.9);
				transform: scale(0.9, 0.9);
				-webkit-animation: moveclouds 30s linear infinite;
				-moz-animation: moveclouds 30s linear infinite;
				-o-animation: moveclouds 30s linear infinite;
			}
			.cloud.s2{
				left: 12.5em;
				-moz-transform: scale(0.7, 0.7);
				-ms-transform: scale(0.7, 0.7);
				-webkit-transform: scale(0.7, 0.7);
				transform: scale(0.7, 0.7);
				-webkit-animation: moveclouds 50s linear infinite;
				-moz-animation: moveclouds 50s linear infinite;
				-o-animation: moveclouds 50s linear infinte;
			}
			.cloud.s3{
				left: -15.625em;
				top: -12.5em;
				-moz-transform: scale(0.4, 0.4);
				-ms-transform: scale(0.4, 0.4);
				-webkit-transform: scale(0.4, 0.4);
				transform: scale(0.4, 0.4);
				-webkit-animation: moveclouds 40s linear infinite;
				-moz-animation: moveclouds 40s linear infinite;
				-o-animation: moveclouds 40s linear infinite;
			}
			.cloud.s4{
				left: 29.375em;
				top: -35.65em;
				-moz-transform: scale(0.5, 0.5);
				-ms-transform: scale(0.5, 0.5);
				-webkit-transform: scale(0.5, 0.5);
				transform: scale(0.5, 0.5);
				-webkit-animation: moveclouds 36s linear infinite;
				-moz-animation: moveclouds 36s linear infinite;
				-o-animation: moveclouds 36s linear infinite;
			}
			.cloud.s5{
				left: -38em;
				top: -38em;
				-moz-transform: scale(0.3, 0.3);
				-ms-transform: scale(0.3, 0.3);
				-webkit-transform: scale(0.3, 0.3);
				transform: scale(0.3, 0.3);
				-webkit-animation: moveclouds 44s linear infinite;
				-moz-animation moveclouds 44s linear infinite;
				-o-animation: moveclouds 44s linear infinte;
			}

			@-webkit-keyframes moveclouds{
				0%{
					margin-left: 125em;
				}
				100%{
					margin-left: -125em;
				}
			}
			@-moz-keyframes moveclouds{
				0%{
					margin-left: 125em;
				}
				100%{
					margin-left: -125em;
				}
			}
			@-o-keyframes moveclouds{
				0%{
					margin-left: 125em;
				}
				100%{
					margin-left: -125em;
				}
			}
		</style>
	</head>
	<body>
		<div class="clouds">
			<div class="cloud s1"></div>
			<div class="cloud s2"></div>
			<div class="cloud s3"></div>
			<div class="cloud s4"></div>
			<div class="cloud s5"></div>
		</div>
	</body>
</html>