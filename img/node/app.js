// ThumbnailGenerator
// Carrot

const express = require("express")
const bodyParser = require("body-parser")
const fs = require("fs")

const app = express()
const port = process.env.PORT || 3000

app.use(bodyParser.json({ limit: '50mb' }))
app.use((req, res, next) => {
	var data = ""
	
	req.setEncoding("utf8")
	req.on("data", (chunk) => {
		data += chunk
	})
	
	req.on("end", () => {
		req.body = data
		next()
	})
})

app.post("/upload", (req, res) => {
	let thumbnail = JSON.parse(req.body)
	let name = "thumbnail-" + Date.now()

	if (thumbnail.format == "OBJ") {
		let click = JSON.parse(thumbnail.click)
		
		// Create directory
		fs.mkdirSync("thumbnails/" + name)
		
		// Save files
		for (const [file, payload] of Object.entries(click.files)) {
			fs.writeFile("thumbnails/" + name + "/" + file, payload.content, (error) => {
				if (error) throw error
				console.log("Wrote " + "thumbnails/" + name + "/" + file)
			})
		}
	}
	else
	{
		name += "." + thumbnail.format.toLowerCase()
	
		fs.writeFile("../renders/" + name, thumbnail.click, "base64", (error) => {
			if (error) throw error
			console.log("Wrote " + name)
		})
	}
})

app.get("/upload2", (req, res) => {
	let thumbnail = JSON.parse(req.query['data'])
	let name = "thumbnail-" + Date.now()

	if (thumbnail.format == "OBJ") {
		let click = JSON.parse(thumbnail.click)
		
		// Create directory
		fs.mkdirSync("thumbnails/" + name)
		
		// Save files
		for (const [file, payload] of Object.entries(click.files)) {
			fs.writeFile("thumbnails/" + name + "/" + file, payload.content, (error) => {
				if (error) throw error
				console.log("Wrote " + "thumbnails/" + name + "/" + file)
			})
		}
	}
	else
	{
		name += "." + thumbnail.format.toLowerCase()
	
		fs.writeFile("../renders/" + name, thumbnail.click, "base64", (error) => {
			if (error) throw error
			console.log("Wrote " + name)
		})
	}
})




app.listen(port, () => console.log(`Started ThumbnailServer on port ${port}...`));