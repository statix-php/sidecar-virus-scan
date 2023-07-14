
const AWS = require("aws-sdk");
const s3 = new AWS.S3();

module.exports.handler = async (event, context) => {

    console.log("event: ", event);
    console.log("context: ", context);

};