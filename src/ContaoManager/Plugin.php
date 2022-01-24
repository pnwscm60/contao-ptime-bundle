namespace Pnwscm60\ContaoPtimeBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Pnwscm60\ContaoPtimeBundle\Pnwscm60ContaoPtimeBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoPtimeBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
