<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCapture;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PictureControl extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:PictureControl';

    protected string $name = 'PictureControl';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Picture Control',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::Main
             * line : 141863
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::Main.NikonCapture:PictureControl',
            'desc' => [
                'en' => 'Picture Control',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
