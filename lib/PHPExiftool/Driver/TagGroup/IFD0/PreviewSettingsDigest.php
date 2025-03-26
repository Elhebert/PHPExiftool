<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewSettingsDigest extends AbstractTagGroup
{
    protected string $id = 'IFD0:PreviewSettingsDigest';

    protected string $name = 'PreviewSettingsDigest';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Preview Settings Digest',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84476
             * type : int8u
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Exif::Main.IFD0:PreviewSettingsDigest',
            'desc' => [
                'en' => 'Preview Settings Digest',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
