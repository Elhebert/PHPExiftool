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
class Rsiz extends AbstractTagGroup
{
    protected string $id = 'MXF:Rsiz';

    protected string $name = 'Rsiz';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Rsiz',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 118384
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:Rsiz',
            'desc' => [
                'en' => 'Rsiz',
            ],
        ],
    ];

    protected int $count = 0;
}
