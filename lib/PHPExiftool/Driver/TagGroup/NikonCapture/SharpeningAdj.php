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
class SharpeningAdj extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:SharpeningAdj';

    protected string $name = 'SharpeningAdj';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sharpening Adj',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::PictureCtrl
             * line : 142030
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::PictureCtrl.NikonCapture:SharpeningAdj',
            'desc' => [
                'en' => 'Sharpening Adj',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
