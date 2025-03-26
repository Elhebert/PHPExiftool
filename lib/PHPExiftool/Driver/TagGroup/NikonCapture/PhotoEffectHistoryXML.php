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
class PhotoEffectHistoryXML extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:PhotoEffectHistoryXML';

    protected string $name = 'PhotoEffectHistoryXML';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::Main
             * line : 210896
             * type : undef
             * writable : true
             * count :
             * flags : binary,permanent
             */
            'id' => 'NikonCapture::Main.NikonCapture:PhotoEffectHistoryXML',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2054;
}
