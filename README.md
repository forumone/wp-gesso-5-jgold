# Very Scary Celery Practice Project

## Project Setup Instructions

To set up the local environment, do the following:

1. Install [`docker`](https://docs.docker.com/install/) and [`docker-compose`](https://docs.docker.com/compose/install/), if not already installed.

2. Install [`ddev`](https://forumone.atlassian.net/wiki/spaces/TECH/pages/2859270145/Installing+DDev). **For WordPress projects, you need 1.19 or later.**

3. Clone this repository.
```
git clone [INSERT git repo URL]
```

4. Create a `.env` in the project root directory for local development. See the `.env.local` file for an example.

5. Private Composer repository access.

    1. Get an API Token for the repository.
        - Forum One Developer: Find the "F1 WP Composer Repo Key" entry in Bitwarden for API token.
        - Vendor/Client: Get the API token from your Forum One point of contact.
    2. Create an `auth.json` file in the project root directory.
    3. Enter the access detail into the `auth.json` file.

        ```
        {
            "http-basic": {
                "satispress.forumone.dev": {
                    "username": "<API Token>",
                    "password": "<API Token Password>"
                }
            }
        }
        ```

    4. Confirm the `auth.json` file is listed in the `.gitignore` file in the project root directory to ensure that it doesn’t get committed to the git repository.

6. Run:
```
ddev start
```

7. Install WordPress core and plugins.
```
ddev composer install
```

8. Install theme development dependencies.
```
ddev gesso install
```

9. Import the database.
```
ddev wp db import resources/database-dumps/export.sql
```

10. Fix local DB URLs.
```
ddev wp search-replace 'fed-workshop-wp-gesso-5.ddev.site' '[DDEV Site URL].ddev.site' --all-tables
```

11. Flush the cache.
```
ddev wp cache flush
```

12. Load the environment configuration.
```
ddev wp config pull all
```

13. Restart ddev
```
ddev stop && ddev start
```

14. Create your user account
```
ddev wp user create [username] [email address] --role=administrator
ddev wp user update [username] --user_pass=[NEWPASSWORD]
```

## Building/Watching Theme File Changes
1. Build the theme assets.
```
ddev gesso build
```
2. Watch for changes
```
ddev gesso watch
```
