<!--.page -->
  <div role="document" class="page clearfix">


      <div class="l-branding-wrapper clearfix">

        <?php if ($messages && !$zurb_foundation_messages_modal): ?>
          <!--.l-messages -->
          <section class="l-messages row">
            <div class="large-12 columns">
              <?php if ($messages): print $messages; endif; ?>
              </div>
            </section>
            <!--/.l-messages -->
          <?php endif; ?>

          <?php if (!empty($page['help'])): ?>
            <!--.l-help -->
            <section class="l-help row">
              <div class="large-12 columns">
                <?php print render($page['help']); ?>
              </div>
            </section>
            <!--/.l-help -->
          <?php endif; ?>

          <main role="main" class="row l-main">
            <div class="large-12 main columns">
              <?php if (!empty($page['highlighted'])): ?>
                <div class="highlight panel callout">
                  <?php print render($page['highlighted']); ?>
                </div>
              <?php endif; ?>

              <a id="main-content"></a>

              <?php if ($title && !$is_front): ?>
                <?php print render($title_prefix); ?>
                <h1 id="page-title" class="title"><?php print $title; ?></h1>
                <?php print render($title_suffix); ?>
              <?php endif; ?>

              <?php if (!empty($tabs)): ?>
                <?php print render($tabs); ?>
                <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
                <?php endif; ?>

                <?php if ($action_links): ?>
                  <ul class="action-links">
                    <?php print render($action_links); ?>
                  </ul>
                <?php endif; ?>

                <?php print render($page['content']); ?>
              </div>
              <!--/.l-main region -->


            </main>
            <!--/.l-main-->

          </div>
          <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
          </div>
          <!--/.page -->
