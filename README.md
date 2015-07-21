# Development
--
#### Running the Development Environment

```bash
docker-compose -f development.yml build
docker-compose -f development.yml up
```

This assumes that you have docker installed. If not, go grab it from [Docker](https://docs.docker.com/installation/)

#### Acesssing the site locally
For linux systems: `localhost:8002` 

for boot2docker systems (osx, windows, etc), docker runs on VmWare. The ip address can be accessed via:

```bash
# get the ip address of the virtual machine
boot2docker ip

```

Frontend Files and templates
--
There are two sides to the opencart platform:

* Catalog (app/catalog/view)
* Admin (app/admin/view)

Each side has it's own templates (.tpl), css, and js associated with it.

In the development environment, these are mounted to the container. Changes will be seen live. No build scripts are in place.

```yaml
  volumes:
    - app/catalog/view:/vapescape/catalog/view
    - app/admin/view:/vapescape/admin/view
```

if you want to add any more files or directories to the server, add them to volumes in `development.yml`

Known Issues
--
Right now, I can't seem to get the files to `chown -R www-data` just yet. What happens is that the files end up being owned by `UID 1000:staff`. It's probably a docker specific thing.
