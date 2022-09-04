const options = {
	method: 'POST',
	headers: {
		'content-type': 'application/json',
		'Content-Type': 'application/json',
	},
	body: '{"language_id":46,"source_code":"dd","stdin":"erfan","expected_output":"erfan"}'
};
var i = 0
while(i<1000){
    fetch('http://localhost:2358/submissions?base64_encoded=false&fields=*', options)
	.then(response => response.json())
	.then(response => console.log(response))
	.catch(err => console.error(err));
    i++;
}


// const options = {
// 	method: 'GET',
// 	headers: {
// 	}
// };

// fetch('https://5c1e-118-179-107-241.ngrok.io/submissions/fd0dd53e-90ea-40a1-8125-7ab9e9c21d6a?base64_encoded=true&fields=*', options)
// 	.then(response => response.json())
// 	.then(response => console.log(response))
// 	.catch(err => console.error(err));
