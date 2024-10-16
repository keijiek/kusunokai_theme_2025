<?php

namespace view\pages;

require_once(__DIR__ . '/_PageRendererBase.class.php');

use view\pages\PageRendererBase;

class FrontPageRenderer extends PageRendererBase
{
  public function __construct()
  {
    parent::__construct();
  }

  public function content(): void
  {
?>
    <section class="container mx-auto  ">
      <?php $this->testSection() ?>
    </section>

    <section>
      <?php $this->kusuNewsSection(); ?>
    </section>

    <?php

    ?>



  <?php
  }

  private function testSection(): void
  {
  ?>

    <div role="presentation" class="py-4 px-4 lg:px-4 bg-opacity-25 rounded-3xl bg-white">


      <h2 class="mt-0">ページタイトル2</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe tempora magnam consectetur ratione provident repellendus totam illum officia. Quae vero ullam placeat nesciunt? In cum reiciendis dolor quasi veniam placeat?</p>
      <p class="rellax" data-rellax-speed="10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis culpa aperiam suscipit quas amet modi quibusdam dolorum repellat quod maxime numquam, atque adipisci sed consequatur nostrum ut velit accusantium dolor aspernatur alias doloremque. Sit, beatae? Totam, quo? Quibusdam commodi accusantium, illo architecto aspernatur soluta aliquam necessitatibus nostrum nam molestiae sint odio, impedit illum et omnis eius delectus, veniam natus ut nihil at ducimus velit corrupti? Sint quas aut, consequatur iste quibusdam corporis veritatis rem quae, similique facere animi pariatur alias, eum labore laborum! Nesciunt iste quam non eos nobis asperiores expedita at pariatur omnis aliquam necessitatibus cupiditate, ut nam fuga voluptate totam provident beatae reprehenderit animi sit veniam vel tenetur sed officia! Dolore facilis nesciunt vero! Nihil voluptatem voluptate, ducimus voluptates quod quidem illum nemo necessitatibus ut ipsam non magni placeat rem inventore voluptatibus. Culpa ipsa minima necessitatibus veritatis qui mollitia maxime porro, expedita aliquid laborum atque unde esse? Ratione vero, aliquid labore voluptatem provident facere voluptas. Id amet dolores harum possimus? Eum delectus dolorum obcaecati tenetur. Nisi quisquam impedit aliquam alias sint ab perferendis, deleniti molestias illum error, quidem amet voluptates id eveniet inventore! Sint similique dolorem eos consequatur doloribus? Temporibus, voluptatum odit adipisci minus dolorum error doloribus cumque sequi officiis itaque, harum sunt enim fuga. Quae qui sunt doloribus nostrum cupiditate facilis pariatur, dicta illum nulla nemo distinctio! Tenetur ipsa harum nostrum similique magni beatae modi fuga voluptatibus minima cum doloremque accusamus debitis quas amet, deserunt tempora quidem animi impedit aspernatur perspiciatis omnis id quae, distinctio optio! Repellendus commodi dignissimos beatae sit laudantium, cupiditate eligendi amet? Eveniet praesentium possimus, repellendus odit illum ipsa sapiente perferendis. Laudantium laboriosam quia nesciunt facere delectus odit dicta eum, ipsam reprehenderit exercitationem provident dolorum, voluptates fugit asperiores sequi commodi nisi quibusdam qui aperiam minus, voluptatem velit voluptatibus cupiditate. Eaque, ipsam! Provident quo nihil minima ratione cumque libero alias quam maxime, obcaecati sint, recusandae praesentium ullam atque dicta deserunt laudantium neque rerum magni amet ut? Nisi illum quidem sed non nesciunt porro aperiam provident adipisci exercitationem beatae est quo quia qui, maiores voluptatum culpa mollitia sint labore illo neque, reprehenderit sequi repellat nostrum. Modi dolores aperiam quod ex nulla. Odit eligendi vel accusamus sequi minus labore animi deserunt a repellat, odio culpa nesciunt soluta nulla. Ex, repellendus culpa aliquid dolores provident officiis minima sit hic accusantium, labore veniam minus libero itaque iusto architecto! Repellat labore magnam error quaerat facere aperiam totam quis expedita maiores. Possimus asperiores debitis, a veniam tempore omnis ut maxime quaerat illo eius facilis, molestiae, ipsa fuga sed dolores? Repellat incidunt autem commodi minima maxime id, fugit sapiente rem ab enim eaque facere quo nulla ad quod. Quaerat debitis laborum exercitationem odio sunt. Voluptatem praesentium officia dolorum sequi. Recusandae dolorem id laboriosam sit asperiores. Id dolores rerum deserunt mollitia corrupti animi exercitationem perferendis veniam sit. Harum ea laudantium porro tempore, autem beatae, earum modi facilis explicabo adipisci a aspernatur ad neque voluptatibus quod veritatis repellat, unde optio quasi saepe minus distinctio? Perferendis ex ut quis maiores, illo voluptatem error? Reiciendis, neque magnam voluptatum harum officia rerum sit autem temporibus optio reprehenderit voluptas cumque fugit molestias beatae assumenda dolor pariatur labore dolore dolorum ab. Recusandae odit quis, nostrum repellendus, reiciendis veritatis laudantium, non omnis consectetur laborum quasi molestiae labore minima nisi sapiente inventore explicabo commodi fuga accusantium id necessitatibus. Iste, ducimus mollitia? Dolorem ut esse minus soluta repellat quibusdam, necessitatibus culpa totam eaque perferendis ipsa non quo repudiandae, vero eius adipisci dolores molestiae iste dicta suscipit, ducimus commodi. Maiores ut id ad aliquid nobis tempore, esse similique perferendis. Laboriosam quam et voluptatibus quisquam nam inventore fugit molestiae veniam quod illum nulla id ullam explicabo incidunt accusantium maiores accusamus, dolorum animi omnis cumque quae modi. Suscipit, ullam laborum. Libero iure totam provident sit debitis asperiores ratione, ad laborum nisi consequuntur aliquam dolor ipsa consectetur corporis ut magni eligendi, fugit quo ex non veniam quos possimus obcaecati velit? Quia dignissimos rerum distinctio ipsum dolorem delectus quasi dolorum eaque necessitatibus, illo sint tempora hic perspiciatis assumenda libero obcaecati consequatur totam. Dolores molestias repellendus autem laudantium atque debitis saepe nesciunt eligendi! Minus ipsam est nulla tempore quibusdam tenetur provident voluptatem repellat animi in, sequi quis iure quasi. Fugiat blanditiis ratione error tempora tempore rerum distinctio id facilis soluta illum rem eligendi, ut nam sunt tenetur ipsa animi asperiores aliquam! Corrupti voluptates doloribus impedit esse recusandae quisquam veritatis aspernatur, repellat voluptate ab, mollitia fugiat debitis ea perspiciatis quos tenetur. Sit dolores consequatur quod, tenetur numquam minima non magni neque eaque labore quas, quidem eos error sunt nobis sint id a eum dolorem enim blanditiis eligendi molestias ex at. Quam inventore atque debitis itaque? Rem molestiae libero voluptates! Aliquam consequatur recusandae possimus totam temporibus quam. Provident omnis voluptas error doloremque consequuntur ducimus fugiat, hic ab exercitationem accusamus nostrum veritatis excepturi impedit sapiente dolores? Autem ex nobis ullam laboriosam tempore officia, hic animi ducimus eligendi accusantium eius consectetur rerum nostrum eum eveniet libero magni sequi iste odio cum nihil exercitationem ratione dicta nulla? Iure deleniti accusamus eaque consequuntur aut laudantium! Quidem, et. Incidunt, blanditiis dolorum mollitia voluptatem perspiciatis earum. Nemo officiis error alias quam quisquam provident suscipit repellendus quibusdam. Quos architecto autem, tempora est dignissimos aliquam adipisci excepturi libero quia ex. Eveniet odit fuga, assumenda quod magni dolores reprehenderit animi! Accusantium sed, temporibus, architecto possimus neque repellendus aut at tenetur, est vel porro quo harum vitae libero illo necessitatibus. Numquam nobis dolores sequi eius, veritatis explicabo recusandae voluptatum, iusto perferendis quis laudantium doloremque ducimus quaerat quas corrupti architecto vitae culpa sint ipsam maxime, error ullam quibusdam est. Itaque perspiciatis, recusandae, odit obcaecati nostrum modi ab dolor omnis, soluta dignissimos expedita sit nobis qui optio. Possimus corporis dolorum deleniti dignissimos ex voluptates quos quibusdam perspiciatis nisi, laboriosam sed consectetur quis fugiat eveniet ratione magnam expedita facere ipsa accusantium iusto provident unde laudantium magni. Omnis, dignissimos quam. Quibusdam laborum corrupti numquam labore quidem quisquam laudantium. At, officiis blanditiis modi quas adipisci nobis molestias dolorem voluptatibus magni dignissimos beatae, numquam quis? Sed aspernatur earum pariatur vel fuga nulla, natus iste mollitia tempore.</p>
    </div>
    </section>
<?php
  }
  private function kusuNewsSection(): void {}
}
