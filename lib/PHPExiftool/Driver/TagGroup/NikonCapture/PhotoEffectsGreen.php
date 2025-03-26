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
class PhotoEffectsGreen extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:PhotoEffectsGreen';

    protected string $name = 'PhotoEffectsGreen';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Photo Effects Green',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::PhotoEffects
             * line : 142003
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::PhotoEffects.NikonCapture:PhotoEffectsGreen',
            'desc' => [
                'en' => 'Photo Effects Green',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
