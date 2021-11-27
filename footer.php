        </div>

    </main>    

        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                &copy; <?= date('Y') . ' ' . get_bloginfo('name'); ?>
              </div>
              <div class="col l4 s12">
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const elems = document.querySelectorAll('.sidenav');
            const instances = M.Sidenav.init(elems, {});
        });
    </script>
    <?php wp_footer(); ?>
</body>
</html>