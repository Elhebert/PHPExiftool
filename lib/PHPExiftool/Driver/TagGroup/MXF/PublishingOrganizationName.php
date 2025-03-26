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
class PublishingOrganizationName extends AbstractTagGroup
{
    protected string $id = 'MXF:PublishingOrganizationName';

    protected string $name = 'PublishingOrganizationName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Publishing Organization Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116907
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:PublishingOrganizationName',
            'desc' => [
                'en' => 'Publishing Organization Name',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116910
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:PublishingOrganizationName',
            'desc' => [
                'en' => 'Publishing Organization Name',
            ],
        ],
    ];

    protected int $count = 0;
}
