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
class SecondGivenName extends AbstractTagGroup
{
    protected string $id = 'MXF:SecondGivenName';

    protected string $name = 'SecondGivenName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Second Given Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114183
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:SecondGivenName',
            'desc' => [
                'en' => 'Second Given Name',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116382
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:SecondGivenName',
            'desc' => [
                'en' => 'Second Given Name',
            ],
        ],
    ];

    protected int $count = 0;
}
