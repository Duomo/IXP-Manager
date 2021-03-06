
<?php

    // discover latency graph details
    $latencyGraphs = [];
    foreach( $t->vi->getVlanInterfaces() as $vli ) {
        foreach( IXP\Services\Grapher\Graph::PROTOCOLS_REAL as $p ) {
            if( $vli->canGraphForLatency( $p ) ) {
                $latencyGraph = Grapher::latency( $vli )->setProtocol( $p );
                if( Grapher::backendsForGraph( $latencyGraph ) ) {
                    $latencyGraphs[] = $latencyGraph;
                }
            }
        }
    }

?>

<?php if( count( $latencyGraphs ) ): ?>
    <?php if( $t->grapher()->canAccessAllCustomerLatencyGraphs() || ( Auth::check() && Auth::user()->getCustomer()->getId() == $t->vi->getCustomer()->getId() ) ): ?>

        <div class="btn-group btn-group-sm dropup">
            <button type="button" class="btn btn-white btn-sm dropdown-toggle d-flex" data-toggle="dropdown" title="Latency Graphs"  aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-clock-o"></i>
            </button>

            <ul class="dropdown-menu">
                <h5 class="dropdown-header">Latency Graphs - Targets</h5>
                <div class="dropdown-divider"></div>
                <?php foreach( $latencyGraphs as $latencyGraph ): ?>

                    <a class="dropdown-item" href="<?= route( 'statistics@latency', [ 'vliid' => $latencyGraph->vli()->getId(), 'protocol' => $latencyGraph->protocol() ] ) ?>">
                        <?= $latencyGraph->vli()->getIPAddress( $latencyGraph->protocol() )->getAddress() ?>
                    </a>

                <?php endforeach; ?>
            </ul>
        </div>

    <?php endif; ?>
<?php endif; ?>

