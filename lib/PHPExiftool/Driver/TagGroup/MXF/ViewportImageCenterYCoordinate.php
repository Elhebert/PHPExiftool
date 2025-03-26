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
class ViewportImageCenterYCoordinate extends AbstractTagGroup
{
    protected string $id = 'MXF:ViewportImageCenterYCoordinate';

    protected string $name = 'ViewportImageCenterYCoordinate';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Viewport Image Center Y Coordinate',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114836
             * type : int16s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ViewportImageCenterYCoordinate',
            'desc' => [
                'en' => 'Viewport Image Center Y Coordinate',
            ],
        ],
    ];

    protected int $count = 0;
}
