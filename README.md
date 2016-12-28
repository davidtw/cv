# David Twigger - CV

## Docker

### Build the container : (may take a while the first time)
```bash
sudo docker build -t davidtwigger/cv .
```

### Run the docker :
```shell
sudo docker run -p 80:80 -v [path/to/cloned/local/src/directory]:/var/www/html davidtwigger/cv
```

You should then be able to veew the app by go to http://localhost in your browser