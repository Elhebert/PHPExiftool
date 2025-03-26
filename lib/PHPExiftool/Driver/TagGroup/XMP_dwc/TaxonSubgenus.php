<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_dwc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TaxonSubgenus extends AbstractTagGroup
{
    protected string $id = 'XMP-dwc:TaxonSubgenus';

    protected string $name = 'TaxonSubgenus';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Taxon Subgenus',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DarwinCore::Main
             * line : 79010
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'DarwinCore::Main.XMP-dwc:TaxonSubgenus',
            'desc' => [
                'en' => 'Taxon Subgenus',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
