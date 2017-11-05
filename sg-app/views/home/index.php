<div class="container">
    <div class="wrapper">
          <main>
                <input id="tab1" type="radio" name="tabs" checked>
                <label for="tab1" class="tab_label">Success Call Drivers ( <a href="javascript:void(0);" class="popup_id">Tariff</a> )</label>

                <input id="tab2" type="radio" name="tabs">
                <label for="tab2" class="tab_label">Success Travel ( <a href="javascript:void(0);" class="popup_id">Tariff</a> )</label>

                <section id="content1">
                    <div class="tab_content_div">
                        <?= $this->load->view('includes/call_drivers', [], true); ?>
                    </div>
                </section>

                <section id="content2">
                    <div>
                        <?= $this->load->view('includes/travel', [], true); ?>
                    </div>
                </section>
        </main>
    </div>
</div>
