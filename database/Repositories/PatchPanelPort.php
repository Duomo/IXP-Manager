<?php

namespace Repositories;

use Doctrine\ORM\EntityRepository;
use Entities\PatchPanel;

/**
 * Cabinet
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PatchPanelPort extends EntityRepository
{
    public function getAllPatchPanelPort(int $patchPanelId = null):array {
        $dql = "SELECT ppp
                    FROM Entities\\PatchPanelPort ppp
                    JOIN ppp.patchPanel pp
                    WHERE ppp.duplexMasterPort IS NULL";

        if($patchPanelId != null){
            $dql .= " AND pp.id = $patchPanelId";
        }

        $listPatchPanelPort = $this->getEntityManager()->createQuery( $dql )->getResult();

        return $listPatchPanelPort;
    }

    public function getPatchPanelPortAvailableForDuplex(int $patchPanelId, int $portId):array {
        $dql = "SELECT ppp
                    FROM Entities\\PatchPanelPort ppp
                    JOIN ppp.patchPanel pp
                    WHERE
                        pp.id = $patchPanelId
                        AND ppp.id != $portId
                    AND ppp.duplexMasterPort IS NULL
                    
                   AND ppp.state = ".\Entities\PatchPanelPort::STATE_AVAILABLE;

        $availablePorts = $this->getEntityManager()->createQuery( $dql )->getResult();

        $listAvailablePort = array();

        foreach($availablePorts as $port){
            $listAvailablePort[$port->getId()] = $port->getPatchPanel()->getPortPrefix().$port->getNumber();
        }
        return $listAvailablePort;
    }

    public function isSwitchPortAvailable($switchPortId, $patchPanelPortId = null){
        $dql = "SELECT count(ppp.id)
                    FROM Entities\\PatchPanelPort ppp
                    WHERE
                        ppp.switchPort = $switchPortId";

        $query = $this->getEntityManager()->createQuery( $dql );
        $nb = $query->getSingleScalarResult();
        return ($nb > 0) ? false : true;
    }
}
