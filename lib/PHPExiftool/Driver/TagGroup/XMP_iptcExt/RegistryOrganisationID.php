<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RegistryOrganisationID extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:RegistryOrganisationID';

    protected string $name = 'RegistryOrganisationID';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Registry Organisation ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289474
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:RegistryOrganisationID',
            'desc' => [
                'en' => 'Registry Organisation ID',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
