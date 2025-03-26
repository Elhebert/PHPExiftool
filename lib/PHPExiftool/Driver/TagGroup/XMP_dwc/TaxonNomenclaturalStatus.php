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
class TaxonNomenclaturalStatus extends AbstractTagGroup
{
    protected string $id = 'XMP-dwc:TaxonNomenclaturalStatus';

    protected string $name = 'TaxonNomenclaturalStatus';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Taxon Nomenclatural Status',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DarwinCore::Main
             * line : 78977
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'DarwinCore::Main.XMP-dwc:TaxonNomenclaturalStatus',
            'desc' => [
                'en' => 'Taxon Nomenclatural Status',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
