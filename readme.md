### Init with GraphQL ###

Consulta de Usuários e seus Posts
```
{
  users(page: 1) {
    data {
      id
      name
      email,
      posts {
        id
        title
        active
      }
    }
    total
    per_page
    current_page
    from
    to
    last_page
    has_more_pages
  }
}
```

Consulta de Posts
```
{
  posts {
    data {
      id
      title
      active
    }
    total
    per_page
    current_page
    from
    to
    last_page
    has_more_pages
  }
}
```
