#
to see laravel in another machine sudo "php artisan serve --host 192.168.1.103 --port 8000"
#
to make adminlte theme collapsible by default just need to a body class sidebar-collapse
# to get auth api id
Auth::guard('api').id();

# to eagar load in route model binding
$job->load('user', 'user.person');
$job->load(['user', 'user.person', 'keywords' => function ($query) {
  $query->select('name');
}]);

# to get rid of pivot attribute
protected $hidden = ['pivot']
