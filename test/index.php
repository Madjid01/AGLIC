<!DOCTYPE html>
<html>
<head>
  <title>My Website</title>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
</head>
<body>
  <div id="app">
    <nav>...</nav>
    <my-body-component :title="title" :content="content"/>
    <button v-on:click="updateContent">Update Content</button>
    <footer>...</footer>
  </div>

  <script>
    // Define the new component
    Vue.component('my-body-component', {
      props: ['title', 'content'],
      template: `
        <div>
          <h1>{{ title }}</h1>
          <p>{{ content }}</p>
        </div>
      `
    })

    // Create the Vue instance
    new Vue({
      el: '#app',
      data: {
        title: 'Initial Title',
        content: 'Initial Content'
      },
      methods: {
        updateContent: function() {
          this.title = 'New Title'
          this.content = 'New Content'
        }
      }
    })
  </script>
</body>
</html>
