<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Microsoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProtectionType extends AbstractTagGroup
{
    protected string $id = 'Microsoft:ProtectionType';

    protected string $name = 'ProtectionType';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Protection Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Microsoft::Xtra
             * line : 120639
             * type : ?
             * writable : false
             * count :
             * flags : avoid
             */
            'id' => 'Microsoft::Xtra.Microsoft:ProtectionType',
            'desc' => [
                'en' => 'Protection Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 1;
}
