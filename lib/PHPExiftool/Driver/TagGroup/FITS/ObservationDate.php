<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FITS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ObservationDate extends AbstractTagGroup
{
    protected string $id = 'FITS:ObservationDate';

    protected string $name = 'ObservationDate';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Observation Date',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FITS::Main
             * line : 85296
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FITS::Main.FITS:ObservationDate',
            'desc' => [
                'en' => 'Observation Date',
            ],
        ],
    ];

    protected int $count = 0;
}
