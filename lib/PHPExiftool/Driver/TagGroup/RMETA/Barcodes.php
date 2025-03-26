<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RMETA;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Barcodes extends AbstractTagGroup
{
    protected string $id = 'RMETA:Barcodes';

    protected string $name = 'Barcodes';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Barcodes',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Ricoh::RMETA
             * line : 234004
             * type : ?
             * writable : false
             * count :
             * flags : list
             */
            'id' => 'Ricoh::RMETA.RMETA:Barcodes',
            'desc' => [
                'en' => 'Barcodes',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 64;
}
