<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FotoStation;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Rotation extends AbstractTagGroup
{
    protected string $id = 'FotoStation:Rotation';

    protected string $name = 'Rotation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Rotation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FotoStation::SoftEdit
             * line : 88966
             * type : int32s
             * writable : true
             * count :
             * flags :
             */
            'id' => 'FotoStation::SoftEdit.FotoStation:Rotation',
            'desc' => [
                'en' => 'Rotation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
