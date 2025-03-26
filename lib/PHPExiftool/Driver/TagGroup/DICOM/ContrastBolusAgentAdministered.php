<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ContrastBolusAgentAdministered extends AbstractTagGroup
{
    protected string $id = 'DICOM:ContrastBolusAgentAdministered';

    protected string $name = 'ContrastBolusAgentAdministered';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Contrast Bolus Agent Administered',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70456
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ContrastBolusAgentAdministered',
            'desc' => [
                'en' => 'Contrast Bolus Agent Administered',
            ],
        ],
    ];

    protected int $count = 0;
}
