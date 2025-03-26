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
class OrganizationCode extends AbstractTagGroup
{
    protected string $id = 'MXF:OrganizationCode';

    protected string $name = 'OrganizationCode';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Organization Code',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116841
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:OrganizationCode',
            'desc' => [
                'en' => 'Organization Code',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116844
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:OrganizationCode',
            'desc' => [
                'en' => 'Organization Code',
            ],
        ],
    ];

    protected int $count = 0;
}
