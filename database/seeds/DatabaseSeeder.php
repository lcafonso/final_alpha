<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DistrictsTableSeeder::class);
        $this->call(CountiesTableSeeder::class);
        $this->call(PlacesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(TechnologiesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        //$this->call(PostsTableSeeder::class);
        //$this->call(AlbumsTableSeeder::class);
        //$this->call(GroupsTableSeeder::class);
    }
}
