<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class KeywordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('keywords')->insert([
          [
            'name' => 'php',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ipsa architecto laudantium voluptatem ullam quam iusto provident, numquam quidem tempore fugiat tenetur quisquam doloremque, aut est quas, libero. Libero eos incidunt eveniet dolorem commodi repudiandae aperiam, mollitia maxime quae. Commodi, ex veniam asperiores nobis libero aliquid voluptate ipsum culpa aut totam sit atque dolor error, necessitatibus inventore illum voluptates sapiente magni tempore ratione eveniet ipsa, ab harum! Saepe optio sed, tenetur, adipisci fugit modi consequuntur repellat. Non officiis laudantium eius, obcaecati nisi soluta nihil molestiae minima? Atque architecto nostrum alias unde eos, incidunt quas qui. Illum rem vero, non quidem!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            'name' => 'html',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ipsa architecto laudantium voluptatem ullam quam iusto provident, numquam quidem tempore fugiat tenetur quisquam doloremque, aut est quas, libero. Libero eos incidunt eveniet dolorem commodi repudiandae aperiam, mollitia maxime quae. Commodi, ex veniam asperiores nobis libero aliquid voluptate ipsum culpa aut totam sit atque dolor error, necessitatibus inventore illum voluptates sapiente magni tempore ratione eveniet ipsa, ab harum! Saepe optio sed, tenetur, adipisci fugit modi consequuntur repellat. Non officiis laudantium eius, obcaecati nisi soluta nihil molestiae minima? Atque architecto nostrum alias unde eos, incidunt quas qui. Illum rem vero, non quidem!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            'name' => 'javascript',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ipsa architecto laudantium voluptatem ullam quam iusto provident, numquam quidem tempore fugiat tenetur quisquam doloremque, aut est quas, libero. Libero eos incidunt eveniet dolorem commodi repudiandae aperiam, mollitia maxime quae. Commodi, ex veniam asperiores nobis libero aliquid voluptate ipsum culpa aut totam sit atque dolor error, necessitatibus inventore illum voluptates sapiente magni tempore ratione eveniet ipsa, ab harum! Saepe optio sed, tenetur, adipisci fugit modi consequuntur repellat. Non officiis laudantium eius, obcaecati nisi soluta nihil molestiae minima? Atque architecto nostrum alias unde eos, incidunt quas qui. Illum rem vero, non quidem!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            'name' => 'react',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ipsa architecto laudantium voluptatem ullam quam iusto provident, numquam quidem tempore fugiat tenetur quisquam doloremque, aut est quas, libero. Libero eos incidunt eveniet dolorem commodi repudiandae aperiam, mollitia maxime quae. Commodi, ex veniam asperiores nobis libero aliquid voluptate ipsum culpa aut totam sit atque dolor error, necessitatibus inventore illum voluptates sapiente magni tempore ratione eveniet ipsa, ab harum! Saepe optio sed, tenetur, adipisci fugit modi consequuntur repellat. Non officiis laudantium eius, obcaecati nisi soluta nihil molestiae minima? Atque architecto nostrum alias unde eos, incidunt quas qui. Illum rem vero, non quidem!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            'name' => 'angular',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ipsa architecto laudantium voluptatem ullam quam iusto provident, numquam quidem tempore fugiat tenetur quisquam doloremque, aut est quas, libero. Libero eos incidunt eveniet dolorem commodi repudiandae aperiam, mollitia maxime quae. Commodi, ex veniam asperiores nobis libero aliquid voluptate ipsum culpa aut totam sit atque dolor error, necessitatibus inventore illum voluptates sapiente magni tempore ratione eveniet ipsa, ab harum! Saepe optio sed, tenetur, adipisci fugit modi consequuntur repellat. Non officiis laudantium eius, obcaecati nisi soluta nihil molestiae minima? Atque architecto nostrum alias unde eos, incidunt quas qui. Illum rem vero, non quidem!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            'name' => 'vue',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ipsa architecto laudantium voluptatem ullam quam iusto provident, numquam quidem tempore fugiat tenetur quisquam doloremque, aut est quas, libero. Libero eos incidunt eveniet dolorem commodi repudiandae aperiam, mollitia maxime quae. Commodi, ex veniam asperiores nobis libero aliquid voluptate ipsum culpa aut totam sit atque dolor error, necessitatibus inventore illum voluptates sapiente magni tempore ratione eveniet ipsa, ab harum! Saepe optio sed, tenetur, adipisci fugit modi consequuntur repellat. Non officiis laudantium eius, obcaecati nisi soluta nihil molestiae minima? Atque architecto nostrum alias unde eos, incidunt quas qui. Illum rem vero, non quidem!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            'name' => 'photoshop',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ipsa architecto laudantium voluptatem ullam quam iusto provident, numquam quidem tempore fugiat tenetur quisquam doloremque, aut est quas, libero. Libero eos incidunt eveniet dolorem commodi repudiandae aperiam, mollitia maxime quae. Commodi, ex veniam asperiores nobis libero aliquid voluptate ipsum culpa aut totam sit atque dolor error, necessitatibus inventore illum voluptates sapiente magni tempore ratione eveniet ipsa, ab harum! Saepe optio sed, tenetur, adipisci fugit modi consequuntur repellat. Non officiis laudantium eius, obcaecati nisi soluta nihil molestiae minima? Atque architecto nostrum alias unde eos, incidunt quas qui. Illum rem vero, non quidem!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            'name' => 'codeigniter',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ipsa architecto laudantium voluptatem ullam quam iusto provident, numquam quidem tempore fugiat tenetur quisquam doloremque, aut est quas, libero. Libero eos incidunt eveniet dolorem commodi repudiandae aperiam, mollitia maxime quae. Commodi, ex veniam asperiores nobis libero aliquid voluptate ipsum culpa aut totam sit atque dolor error, necessitatibus inventore illum voluptates sapiente magni tempore ratione eveniet ipsa, ab harum! Saepe optio sed, tenetur, adipisci fugit modi consequuntur repellat. Non officiis laudantium eius, obcaecati nisi soluta nihil molestiae minima? Atque architecto nostrum alias unde eos, incidunt quas qui. Illum rem vero, non quidem!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            'name' => 'laravel',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ipsa architecto laudantium voluptatem ullam quam iusto provident, numquam quidem tempore fugiat tenetur quisquam doloremque, aut est quas, libero. Libero eos incidunt eveniet dolorem commodi repudiandae aperiam, mollitia maxime quae. Commodi, ex veniam asperiores nobis libero aliquid voluptate ipsum culpa aut totam sit atque dolor error, necessitatibus inventore illum voluptates sapiente magni tempore ratione eveniet ipsa, ab harum! Saepe optio sed, tenetur, adipisci fugit modi consequuntur repellat. Non officiis laudantium eius, obcaecati nisi soluta nihil molestiae minima? Atque architecto nostrum alias unde eos, incidunt quas qui. Illum rem vero, non quidem!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            'name' => 'cakephp',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ipsa architecto laudantium voluptatem ullam quam iusto provident, numquam quidem tempore fugiat tenetur quisquam doloremque, aut est quas, libero. Libero eos incidunt eveniet dolorem commodi repudiandae aperiam, mollitia maxime quae. Commodi, ex veniam asperiores nobis libero aliquid voluptate ipsum culpa aut totam sit atque dolor error, necessitatibus inventore illum voluptates sapiente magni tempore ratione eveniet ipsa, ab harum! Saepe optio sed, tenetur, adipisci fugit modi consequuntur repellat. Non officiis laudantium eius, obcaecati nisi soluta nihil molestiae minima? Atque architecto nostrum alias unde eos, incidunt quas qui. Illum rem vero, non quidem!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            'name' => 'wordpress',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ipsa architecto laudantium voluptatem ullam quam iusto provident, numquam quidem tempore fugiat tenetur quisquam doloremque, aut est quas, libero. Libero eos incidunt eveniet dolorem commodi repudiandae aperiam, mollitia maxime quae. Commodi, ex veniam asperiores nobis libero aliquid voluptate ipsum culpa aut totam sit atque dolor error, necessitatibus inventore illum voluptates sapiente magni tempore ratione eveniet ipsa, ab harum! Saepe optio sed, tenetur, adipisci fugit modi consequuntur repellat. Non officiis laudantium eius, obcaecati nisi soluta nihil molestiae minima? Atque architecto nostrum alias unde eos, incidunt quas qui. Illum rem vero, non quidem!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            'name' => 'css',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ipsa architecto laudantium voluptatem ullam quam iusto provident, numquam quidem tempore fugiat tenetur quisquam doloremque, aut est quas, libero. Libero eos incidunt eveniet dolorem commodi repudiandae aperiam, mollitia maxime quae. Commodi, ex veniam asperiores nobis libero aliquid voluptate ipsum culpa aut totam sit atque dolor error, necessitatibus inventore illum voluptates sapiente magni tempore ratione eveniet ipsa, ab harum! Saepe optio sed, tenetur, adipisci fugit modi consequuntur repellat. Non officiis laudantium eius, obcaecati nisi soluta nihil molestiae minima? Atque architecto nostrum alias unde eos, incidunt quas qui. Illum rem vero, non quidem!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            'name' => 'sass',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ipsa architecto laudantium voluptatem ullam quam iusto provident, numquam quidem tempore fugiat tenetur quisquam doloremque, aut est quas, libero. Libero eos incidunt eveniet dolorem commodi repudiandae aperiam, mollitia maxime quae. Commodi, ex veniam asperiores nobis libero aliquid voluptate ipsum culpa aut totam sit atque dolor error, necessitatibus inventore illum voluptates sapiente magni tempore ratione eveniet ipsa, ab harum! Saepe optio sed, tenetur, adipisci fugit modi consequuntur repellat. Non officiis laudantium eius, obcaecati nisi soluta nihil molestiae minima? Atque architecto nostrum alias unde eos, incidunt quas qui. Illum rem vero, non quidem!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ],
          [
            'name' => 'bootstrap',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ipsa architecto laudantium voluptatem ullam quam iusto provident, numquam quidem tempore fugiat tenetur quisquam doloremque, aut est quas, libero. Libero eos incidunt eveniet dolorem commodi repudiandae aperiam, mollitia maxime quae. Commodi, ex veniam asperiores nobis libero aliquid voluptate ipsum culpa aut totam sit atque dolor error, necessitatibus inventore illum voluptates sapiente magni tempore ratione eveniet ipsa, ab harum! Saepe optio sed, tenetur, adipisci fugit modi consequuntur repellat. Non officiis laudantium eius, obcaecati nisi soluta nihil molestiae minima? Atque architecto nostrum alias unde eos, incidunt quas qui. Illum rem vero, non quidem!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ],
        ]);
    }
}
