<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonScan;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DigitalROC extends AbstractTagGroup
{
    protected string $id = 'NikonScan:DigitalROC';

    protected string $name = 'DigitalROC';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Digital ROC',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ROC
             * line : 137918
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ROC.NikonScan:DigitalROC',
            'desc' => [
                'en' => 'Digital ROC',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
