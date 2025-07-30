## MLP To-DO - Instructions

You must demonstrate the following abilities/skills: make models, controllers, migrations, HTML, CSS, blade, Git commits, blade templates, etc. 

**1. Fork this repo**

**2. Build front-end**

   Layout must be as follows:
   
   ![Alt text](assets/site-layout.png?raw=true "Title")
   Please note that the above image and logo are in the 'assets' folder.

**3. Build To-Do list functionality** 

     A user should be able to
     * Create a task.
     * Delete a task.
     * Mark a task as completed.
     

**Good Luck !!! Once done, please send us the link of your repo.**

## Getting Started

### Prerequisites
- PHP 8.1+
- Composer
- Node.js and npm

### Installation
1. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

2. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Database setup**
   ```bash
   touch database/database.sqlite
   php artisan migrate:fresh --seed
   ```

4. **Build assets**
   ```bash
   npm run build
   ```

5. **Start server**
   ```bash
   php artisan serve
   ```

6. **Visit** `http://localhost:8000`
   
