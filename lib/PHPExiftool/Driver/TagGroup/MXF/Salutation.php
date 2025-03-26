<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Salutation extends AbstractTagGroup
{
    protected string $id = 'MXF:Salutation';

    protected string $name = 'Salutation';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Salutation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115337
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:Salutation',
            'desc' => [
                'en' => 'Salutation',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116931
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:Salutation',
            'desc' => [
                'en' => 'Salutation',
            ],
        ],
    ];

    protected int $count = 0;
}
