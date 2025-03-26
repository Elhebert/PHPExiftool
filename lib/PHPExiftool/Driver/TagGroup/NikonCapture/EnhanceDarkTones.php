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
class EnhanceDarkTones extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:EnhanceDarkTones';

    protected string $name = 'EnhanceDarkTones';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Enhance Dark Tones',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::Brightness
             * line : 141510
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::Brightness.NikonCapture:EnhanceDarkTones',
            'desc' => [
                'en' => 'Enhance Dark Tones',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
